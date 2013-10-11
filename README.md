BsbTranslateControllerPlugin
============================

BsbTranslateControllerPlugin is a small ZF2 module that registers a translator as controller plugin. 

## Installation

BsbTranslateControllerPlugin works with Composer. To install it into your project, just add the following line into your composer.json file:

    "require": {
        "bushbaby/bsb-translate-controller-plugin": "1.0.0"
    }
   
Then update your project by runnning composer.phar update. 

Finally enable the module by adding BsbTranslateControllerPlugin in your application.config.php file. 


## Usage

Within an action controller you as plugins would use the translate and translatePlural view helpers.

Instead of using something ugly as;

    $helper = $this->getServiceLocator()->get('viewhelpermanager')->get('translate');
    echo $helper('message');

Use this;

    echo $this->translate('message');

Instead of using something ugly as;

    $helper = $this->getServiceLocator()->get('viewhelpermanager')->get('translateplural');
    echo sprintf($helper('%s message', '%s messages', $number), $number);

Use this;

    echo sprintf($this->translatePlural('%s message', '%s messages', $number), $number);
    