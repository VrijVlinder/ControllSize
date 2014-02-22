<?php
// Define the plugin:
$PluginInfo['ControllSize'] = array(
   'Name'=>'ControllSize',
   'Description' => 'Resizes anything embedded to any size you want to controll the size and style of anything and everything by CSS.',
   'Version' => '1.1',
   'MobileFriendly'=>TRUE,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => 'http://www.vrijvlinder.com'
);


class ControllSizePlugin extends Gdn_Plugin {
   

   public function Base_Render_Before($Sender) {
      $Controller = $Sender->ControllerName;
      $Application = $Sender->ApplicationFolder;
   
      if ($Controller == "discussioncontroller") {
         $Session = Gdn::Session();
         $Sender->AddCssFile('/plugins/ControllSize/sc.css');
         
      }

     if(($Controller == "discussioncontroller") && IsMobile()) {
      $Session = Gdn::Session();
     
        $Sender->AddCssFile('/plugins/ControllSize/scm.css');
        
     }


   }


   public function Setup() {
     
   }
} 