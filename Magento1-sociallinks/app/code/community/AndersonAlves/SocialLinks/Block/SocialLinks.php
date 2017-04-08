<?php

class AndersonAlves_SocialLinks_Block_SocialLinks extends Mage_Core_Block_Template{

    protected $_helper;

    public function __construct(){
        $this->_helper = Mage::helper('sociallinks');
    }

    public function getHtml(){
        $product_name = Mage::registry('current_product')->getName();
        $product_url = Mage::registry('current_product')->getProductUrl();
        
        $html = '<div class="social-links-share"><ul class="rrssb-buttons clearfix">';

        if($this->_helper->isFacebookEnabled()){
            //Include facebook div
            $html .= '<li class="rrssb-facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u='.urlencode($product_url).'&t='.$product_name.'" class="popup">
                            <span class="rrssb-icon">
                               <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="28" height="28" viewBox="0 0 28 28">
                                    <path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z" />
                               </svg>
                            </span>
                            <span class="rrssb-text">Facebook</span>
                        </a>
                      </li>';
        }

        if($this->_helper->isTwitterEnabled()){
            //Include twitter div
            $html .= '<li class="rrssb-twitter">
                        <a href="http://twitter.com/home/?status='.$product_name.' '.urlencode($product_url).'" class="popup">
                            <span class="rrssb-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                    <path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/>
                                </svg>
                            </span>
                            <span class="rrssb-text">Twitter</span>
                        </a>
                      </li>';
        }

        if($this->_helper->isGoogleEnabled()){
            //Include google div
            $html .= '<li class="rrssb-googleplus">
                        <a href="https://plus.google.com/share?url='.urlencode($product_url).'" class="popup">
                        <span class="rrssb-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21 8.291h-1.949v2.6h-2.6v1.819h2.6v2.599H21V12.71h2.6v-1.885H21V8.291zM7.614 10.306v2.925h3.899c-.26 1.689-1.754 2.924-3.899 2.924-2.34 0-4.29-2.016-4.29-4.354s1.885-4.354 4.29-4.354c1.104 0 2.014.326 2.794 1.105l2.08-2.079c-1.3-1.17-2.924-1.884-4.874-1.884C3.649 4.587.4 7.836.4 11.8s3.249 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/>
                            </svg>
                        </span>
                        <span class="rrssb-text">Google+</span>
                        </a>
                      </li>';
        }

        $html .= '</ul></div>';

        return $html;

    }


}