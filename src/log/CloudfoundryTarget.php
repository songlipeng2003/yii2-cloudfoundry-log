<?php
namespace songlipeng2003\yii2_cloud_foundry\log;

use yii\log\Target;

class CloudfoundryTarget extends Target
{
	public function init()
	{
		parent::init();
	}

	public function export()
	{
        $text = implode("\n", array_map([$this, 'formatMessage'], $this->messages)) . "\n";
		file_put_contents('php://stdout', $text);
	}
}
