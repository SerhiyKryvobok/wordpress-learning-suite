<?php
/**
 * Plugin Name: Simple PHP Parser
 * Description: Scrapes posts from a remote URL and imports them into WordPress.
 * Version:     1.0.0
 * Author:      SK
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_menu', function () {
	add_menu_page(
		'Simple PHP Parser',
		'PHP Parser',
		'manage_options',
		'simple-php-parser',
		'spp_render_page'
	);
} );

function spp_render_page() {
	$results = null;

	if (
		isset( $_POST['spp_nonce'] ) &&
		wp_verify_nonce( $_POST['spp_nonce'], 'spp_import' ) &&
		current_user_can( 'manage_options' )
	) {
		$url     = esc_url_raw( trim( $_POST['spp_url'] ?? '' ) );
		$results = $url ? spp_import( $url ) : 'Please enter a valid URL.';
	}

	?>
	<div class="wrap">
		<h1>Simple PHP Parser</h1>
		<form method="post">
			<?php wp_nonce_field( 'spp_import', 'spp_nonce' ); ?>
			<table class="form-table">
				<tr>
					<th><label for="spp_url">Source URL</label></th>
					<td>
						<input
							type="url"
							id="spp_url"
							name="spp_url"
							class="regular-text"
							value="<?php echo esc_attr( $_POST['spp_url'] ?? '' ); ?>"
							placeholder="https://example.com/category/page"
						/>
					</td>
				</tr>
			</table>
			<?php submit_button( 'Import Posts' ); ?>
		</form>
		<?php if ( $results !== null ) : ?>
			<div class="notice notice-<?php echo is_int( $results ) ? 'success' : 'error'; ?> is-dismissible">
				<p>
					<?php
					echo is_int( $results )
						? esc_html( "Imported {$results} post(s) successfully." )
						: esc_html( $results );
					?>
				</p>
			</div>
		<?php endif; ?>
	</div>
	<?php
}

function spp_import( string $url ): int|string {
	$html = @file_get_contents( $url );

	if ( $html === false ) {
		return "Could not fetch URL: {$url}";
	}

	preg_match_all(
		'#<div class="td-module-thumb"><a href="(.*?)" rel="bookmark"#',
		$html,
		$matches,
		PREG_SET_ORDER
	);

	if ( empty( $matches ) ) {
		return 'No articles found on the page.';
	}

	$imported = 0;

	foreach ( $matches as $match ) {
		$article_url = esc_url_raw( $match[1] );
		$article     = @file_get_contents( $article_url );

		if ( $article === false ) {
			continue;
		}

		preg_match( '#<h1 class="entry-title">(.*?)</h1>#s', $article, $title_match );
		preg_match( '#<div class="td-post-content td-pb-padding-side">(.*?)<footer>#s', $article, $content_match );

		$title   = wp_strip_all_tags( $title_match[1]   ?? '' );
		$content = $content_match[1] ?? '';

		if ( empty( $title ) ) {
			continue;
		}

		$post_id = wp_insert_post( [
			'post_title'    => sanitize_text_field( $title ),
			'post_content'  => wp_kses_post( $content ),
			'post_status'   => 'publish',
			'post_author'   => 1,
			'post_category' => [ 1 ],
		], true );

		if ( ! is_wp_error( $post_id ) ) {
			$imported++;
		}
	}

	return $imported;
}
