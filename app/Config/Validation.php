<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\UserRules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		UserRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $users = [
		'username' => [
			'label' => 'Username', 
			'rules' => 'required|min_length[5]|max_length[30]|is_unique[users.username]|alpha_numeric'
		],
		'password' => [
			'label' => 'Password', 
			'rules' => 'required|min_length[5]|max_length[30]'
		],
		'image' => [
			'label' => 'Profile Picture', 
			'rules' => 'uploaded[image]|ext_in[image,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'Profile picture is required',
				'ext_in' => 'Profile picture is not an image',
			],
		],
	];

	public $roles = [
		'role_name' => [
			'label' => 'Role Name', 
			'rules' => 'required|min_length[3]|max_length[30]|alpha_numeric_space',
			'errors' => [
				'required' => 'Role name is required',
				'min_length' => 'Role name too short',
				'max_length' => 'Role name exceeds max characters',
				'alpha_numeric_space' => 'Role name only accepts alphanumeric characters'
			],
		],
	];

	public $role_perm = [
		'role_id' => [
			'label' => 'Role', 
			'rules' => 'required',
			'errors' => [
				'required' => 'Role is required',
			],
		],
		'perm_id' => [
			'label' => 'Permissions', 
			'rules' => 'required',
			'errors' => [
				'required' => 'Permission is required',
			],
		],
	];

	public $announcements = [
		'title' => [
			'label' => 'Title', 
			'rules' => 'required|min_length[2]|max_length[999]',
			'errors' => [
				'required' => 'Title field is required',
				'min_length' => 'Title field too short',
				'max_length' => 'Title field reached max character length',
			]
		],
		'description' => [
			'label' => 'Description', 
			'rules' => 'required|min_length[2]|max_length[999]',
			'errors' => [
				'required' => 'Description field is required',
				'min_length' => 'Description field too short',
				'max_length' => 'Description field reached max character length',
			]
		],
		'image' => [
			'label' => 'Image', 
			'rules' => 'uploaded[image]|is_image[image]',
			'errors' => [
				'uploaded' => 'No image uploaded',
				'is_image' => 'Uploaded file is not an image',
			]
		],
	];

	public $sliders = [
		'title' => [
			'label' => 'Title', 
			'rules' => 'required|min_length[2]|max_length[999]',
			'errors' => [
				'required' => 'Title field is required',
				'min_length' => 'Title field too short',
				'max_length' => 'Title field reached max character length',
			]
		],
		'description' => [
			'label' => 'Description', 
			'rules' => 'required|min_length[2]|max_length[999]',
			'errors' => [
				'required' => 'Description field is required',
				'min_length' => 'Description field too short',
				'max_length' => 'Description field reached max character length',
			]
		],
		'image' => [
			'label' => 'Image', 
			'rules' => 'uploaded[image]|is_image[image]',
			'errors' => [
				'uploaded' => 'No image uploaded',
				'is_image' => 'Uploaded file is not an image',
			]
		],
	];

	public $elections = [
		'title' => [
			'label' => 'Election Title', 
			'rules' => 'required|min_length[5]|max_length[255]|alpha_numeric_space',
			'errors' => [
				'required' => 'Election title is required',
				'min_length' => 'Election title too short',
				'max_length' => 'Election title too long',
				'alpha_numeric_space' => 'Election title only accepts letters, numbers and spaces',
			]
		],
		'vote_start' => [
			'label' => 'Start Date', 
			'rules' => 'required|valid_date[Y-m-d]',
			'errors' => [
				'required' => 'Vote start is required',
				'valid_date' => 'Vote start date is not a valid date',
			]
		],
		'vote_end' => [
			'label' => 'End Date', 
			'rules' => 'required|valid_date[Y-m-d]',
			'errors' => [
				'required' => 'Vote end is required',
				'valid_date' => 'Vote end date is not a valid date',
			]
		],
	];

	public $positions = [
		'election_id' => [
			'label' => 'Election Name', 
			'rules' => 'required|numeric',
			'errors' => [
				'required' => 'Election is required',
				'numeric' => 'Error selecting an election',
			],
		],
		'name' => [
			'label' => 'Position Name', 
			'rules' => 'required|min_length[3]|max_length[100]|alpha_numeric_space',
			'errors' => [
				'required' => 'Position name field is required',
				'min_length' => 'Position name field too short',
				'max_length' => 'Position name field exceed limit',
				'alpha_numeric_space' => 'Position name field includes symbols',
			],
		],
		'max_candidate' => [
			'label' => 'Max candidates', 
			'rules' => 'required|numeric',
			'errors' => [
				'required' => 'Max number of candidates is required',
				'numeric' => 'Max number is not a number',
			],
		],
	];

	public $candidates = [
		'user_id' => [
			'label' => 'Candidate Name',
			'rules' => 'required|numeric',
			'errors' => [
				'required' => 'Please choose a candidate',
				'numeric' => 'Wrong choice, please try again',
			]
		],
		'position_id' => [
			'label' => 'Position',
			'rules' => 'required|numeric',
			'errors' => [
				'required' => 'Please choose a position',
				'numeric' => 'Wrong choice, please try again',
			]
		],
		'photo' => [
			'label' => 'Photo', 
			'rules' => 'is_image[photo]',
			'errors' => [
				'is_image' => 'Uploaded file is not an photo',
			]
		],
		'platform' => [
			'label' => 'Platform', 
			'rules' => 'max_length[999]',
			'errors' => [
				'max_length' => 'Platform field reached max character length',
			]
		],
	];

	public $fileCategory = [
		'name' => [
			'label' => 'Category Name',
			'rules' => 'required|min_length[3]|max_length[100]|alpha_numeric_space',
			'errors' => [
				'required' => 'File category name field is required',
				'min_length' => 'File category name field too short',
				'max_length' => 'File category name field exceed limit',
				'alpha_numeric_space' => 'File category name field includes symbols',
			]
		],
	];

	public $files = [
		'name' => [
			'label' => 'File Name', 
			'rules' => 'required|min_length[5]|max_length[30]|alpha_numeric_space'
		],
		'file' => [
			'label' => 'File', 
			'rules' => 'uploaded[file]|max_size[file,20000]'
		],
	];
	
	public $comment = [
		'comment' => [
			'rules' => 'required|min_length[3]|max_length[255]',
			'errors' => [
				'required' => 'Comment is required',
				'min_length' => 'Comment field too short',
				'max_length' => 'Comment exceed limit',
			],
		],
	];

  public $editUser = [
		'image' => [
			'label' => 'Profile Picture', 
			'rules' => 'ext_in[image,png,jpg,jpeg]',
			'errors' => [
				'ext_in' => 'Profile picture is not an image',
			],
		],
  ];

}
