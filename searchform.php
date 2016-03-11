<?php
/**
 * The template part for displaying search box
 *
 * @package _pshktheme
 */
?>

<form role="search" method="get" class="widget callout" action="<?php echo home_url( '/' ); ?>">
    <div class="row">
        <div class="large-8 columns prefix">
            <input type="search"
                style="margin: 0 0 0rem;"
                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </div>
        <div class="large-4 columns postfix">
            <input style="margin: 0 0 0rem;" type="submit" class="button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </div>
    </div>
</form>