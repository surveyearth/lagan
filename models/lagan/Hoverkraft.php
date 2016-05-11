<?php

namespace Lagan\Model;

class Hoverkraft extends \Lagan {

	function __construct() {
		$this->type = 'hoverkraft';
		
		// Description in admin interface
		$this->description = 'A hoverkraft is a very special vessel (and a great design angency).';

		$this->properties = [
			// Allways have a title
			[
				'name' => 'title',
				'description' => 'Title',
				'type' => '\Lagan\Property\Str',
				'input' => 'text'
			],
			[
				'name' => 'description',
				'description' => 'Describe the kraft',
				'type' => '\Lagan\Property\Str',
				'input' => 'textarea'
			],
			[
				'name' => 'picture',
				'description' => 'Image',
				'type' => '\Lagan\Property\Fileselect',
				'pattern' => APP_PATH.'/files/*.{jpeg,jpg,gif,png}', // glob pattern
				'input' => 'fileselect'
			],
			[
				'name' => 'position',
				'description' => 'Order',
				'type' => '\Lagan\Property\Position',
				'input' => 'text'
			],
			[
				'name' => 'slug',
				'description' => 'Slug',
				'type' => '\Lagan\Property\Slug',
				'input' => 'text'
			],
			[
				'name' => 'crew',
				'description' => 'Crew',
				'type' => '\Lagan\Property\Onetomany',
				'input' => 'onetomany'
			]
		];
		
		$this->rules = [
			'required' => [
				['title', 'picture']
			],
			'integer' => [
				['position']
			]
		];
	}

}

?>