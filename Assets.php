<?php namespace Brain;

class Assets extends Facade {

    public static function getBindId() {
        return 'occipital.api';
    }

    public static function boot() {
        if ( ! function_exists( 'add_action' ) ) {
            return;
        }
        add_action( 'brain_init', function( $brain ) {
            $brain->addModule( new Occipital\BrainModule );
        } );
    }

}