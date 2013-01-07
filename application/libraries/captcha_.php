<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha_{
    public $CI = null;
    public function __construct()
    {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }
    
    public function creatImage(){
        
        $md5_hash = md5( uniqid() );
        $security_code = substr( $md5_hash, 15, 5 );
        $this->CI->session->set_flashdata('security_code', $security_code);
        $width = 80;
        $height = 22;
        $font_size = $height * 0.75;
        $font = "monofont.ttf";
        $image = imagecreate( $width, $height );
        $white = imagecolorallocate( $image, 50, 0, 60 );
        $black = imagecolorallocate( $image, 140, 140, 140 );
        $grey = imagecolorallocate( $image, 200, 150, 150 );
        imagefill( $image, 0, 0, $black );
        $i = 0;
        for ( ; $i < $width * $height / 3; ++$i )
        {
            imagefilledellipse( $image, mt_rand( 0, $width ), mt_rand( 0, $height ), 1, 1, $grey );
        }
        $i = 0;
        for ( ; $i < $width * $height / 150; ++$i )
        {
            imageline( $image, mt_rand( 0, $width ), mt_rand( 0, $height ), mt_rand( 0, $width ), mt_rand( 0, $height ), $grey );
        }
        
        if (!imagestring($image,$font_size,15,2,$security_code,10))
        {
            exit( "Error in imagestring function" );
        }
        header( "Content-Type: image/jpeg" );
        imagejpeg( $image );
        imagedestroy( $image );
    }
    
}

?>