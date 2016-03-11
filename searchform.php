<?php
/**
 * The template part for displaying search box
 *
 * @package _pshktheme
 */
?>

<form role="search" method="get" class="widget callout" action="<?php echo home_url( '/' ); ?>">
    <div class="row">
        <div class="large-12 columns">
            <label><?php echo _x( 'Search for:', 'label' ) ?>
                <input type="search" class="search-field"
                    placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                    value="<?php echo get_search_query() ?>" name="s"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            </label>
        </div>
        <div class="large-12 columns">
            <input type="submit" class="button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </div>
    </div>
</form>