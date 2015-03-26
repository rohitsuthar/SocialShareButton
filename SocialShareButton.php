<?php
/**
 *SocialShareButton.php
 *
 * @author Rohit Suthar <rohit.suthar@gmail.com>
 * @copyright 2014 Rohit Suthar
 * @package SocialShareButton
 * @version 1.0
 * @Like Us on -  https://facebook.com/yiiexperts
 * @Follow Us on -  https://twitter.com/yiiexperts
 * @Mail -  yiiexpert@gmail.com
 * @For More Extension Visit -  www.yiiexpert.github.io
 */


class SocialShareButton extends CInputWidget
{
	/**
	 * @var string URL to be shared
	 */
	public $url;
    
	/**
	 * @var string box alignment - horizontal, vertical
	 */
	public $style='horizontal';
	
	
	/**
	 * @var string twitter username - yiiexperts
	 */
	public $data_via='';


	/**
	 * @var array available social media share buttons 
	 * like - facebook, googleplus, linkedin, twitter
	 */
	
	public $networks = array('facebook','googleplus','linkedin','twitter');


	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{
        if(empty($this->url)) {
            $this->url = Yii::app()->createAbsoluteUrl(Yii::app()->request->url);
        }
        
		self::renderSocial();
	}


	/**
	 * Render social extension
	 *
	 * @return nothing
	 */
	private function renderSocial(){
		$rendered = '';
		foreach($this->networks as $network)
			$rendered .= $this->render($network, array('url' => $this->url));
		echo $this->render('share', array('rendered'=>$rendered));
	}
}

?>
