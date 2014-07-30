<?php return array(

	// The strategory to deploy with
	// Availables are:
	// - clone | Clones the repository from scratch on every deploy
	// - copy  | Copies the previous release and then updates it
	'strategy' => 'clone',

	// Remote server
	//////////////////////////////////////////////////////////////////////

	// Variables about the servers. Those can be guessed but in
	// case of problem it's best to input those manually
	'variables' => array(
		'directory_separator' => '/',
		'line_endings'        => "\n",
	),

	// The process that will be executed by Composer
	'composer' => function ($task) {
		return array(
			// $task->composer('self-update'),
			$task->composer('install --no-interaction --no-dev --prefer-dist'),
		);
	},

	// The number of releases to keep at all times
	'keep_releases'    => 2,

	// Folders
	////////////////////////////////////////////////////////////////////

	// The root directory where your applications will be deployed
	'root_directory'   => '/home/projects/',

	// The folder the application will be cloned in
	// Leave empty to use `application_name` as your folder name
	'app_directory' => '{application_name}/data',

	// A list of folders/file to be shared between releases
	// Use this to list folders that need to keep their state, like
	// user uploaded data, file-based databases, etc.
	'shared' => array(
		'web/uploads',
		'app/logs',
		'app/cache'
	),

	// Permissions
	////////////////////////////////////////////////////////////////////

	'permissions' => array(

		// The folders and files to set as web writable
		// You can pass paths in brackets, so {path.public} will return
		// the correct path to the public folder
		'files' => array(
			'{path.public}'
		),

		// Here you can configure what actions will be executed to set
		// permissions on the folder above. The Closure can return
		// a single command as a string or an array of commands
		'callback' => function ($task, $file) {
   			 return array(
     	   sprintf('setfacl -R -m user:{application_name}:rwx,default:group:{application_name}:rwx "%s"', $file)
    	);
		}

	),

);
