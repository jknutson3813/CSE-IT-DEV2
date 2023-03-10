<?php
	//Coping Directory
	@copydir('[[softpath]]/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views/', '[[softpath]]/resources/views/errors/');
	@copydir('[[softpath]]/vendor/laravel/framework/src/Illuminate/Notifications/resources/views/', '[[softpath]]/resources/views/vendor/notifications/');
	@copydir('[[softpath]]/vendor/laravel/framework/src/Illuminate/Pagination/resources/views/', '[[softpath]]/resources/views/vendor/pagination/');
	@copydir('[[softpath]]/vendor/laravel/sanctum/database/migrations/', '[[softpath]]/database/migrations/');
	@copydir('[[softpath]]/packages/Webkul/Admin/publishable/assets/', '[[softpath]]/public/vendor/webkul/admin/assets/');
	@copydir('[[softpath]]/packages/Webkul/Ui/publishable/assets/', '[[softpath]]/public/vendor/webkul/ui/assets/');
	@copydir('[[softpath]]/packages/Webkul/Shop/publishable/assets/', '[[softpath]]/public/themes/default/assets/');
	@copydir('[[softpath]]/packages/Webkul/Shop/src/Resources/views/', '[[softpath]]/resources/themes/default/views/');
	@copydir('[[softpath]]/packages/Webkul/Velocity/publishable/assets/', '[[softpath]]/public/themes/velocity/assets/');
	@copydir('[[softpath]]/packages/Webkul/Velocity/src/Resources/views/shop/', '[[softpath]]/resources/themes/velocity/views/');
	@copydir('[[softpath]]/packages/Webkul/BookingProduct/publishable/assets/', '[[softpath]]/public/themes/default/assets/');
	@copydir('[[softpath]]/packages/Webkul/SocialLogin/publishable/assets/', '[[softpath]]/public/themes/default/assets/');
	@copydir('[[softpath]]/packages/Webkul/Notification/src/Database/Migrations/', '[[softpath]]/database/migrations/');
	@copydir('[[softpath]]/vendor/laravel/framework/src/Illuminate/Mail/resources/views/', '[[softpath]]/resources/views/vendor/mail/');
	@copydir('[[softpath]]/packages/Webkul/Admin/src/Resources/lang/', '[[softpath]]/lang/vendor/admin/');
	@copydir('[[softpath]]/packages/Webkul/Shop/src/Resources/lang/', '[[softpath]]/lang/vendor/shop/');
	@copydir('[[softpath]]/packages/Webkul/Velocity/src/Resources/lang/', '[[softpath]]/lang/vendor/velocity/');
	@copydir('[[softpath]]/vendor/spatie/laravel-sitemap/resources/views/', '[[softpath]]/resources/views/vendor/sitemap/');
	@copydir('[[softpath]]/vendor/diglactic/laravel-breadcrumbs/resources/views/', '[[softpath]]/resources/views/vendor/breadcrumbs/');

	@copy('[[softpath]]/vendor/astrotomic/laravel-translatable/src/config/translatable.php', '[[softpath]]/config/translatable.php');
	@copy('[[softpath]]/vendor/barryvdh/laravel-debugbar/config/debugbar.php', '[[softpath]]/config/debugbar.php');
	@copy('[[softpath]]/vendor/barryvdh/laravel-dompdf/config/dompdf.php', '[[softpath]]/config/dompdf.php');
	@copy('[[softpath]]/vendor/flynsarmy/db-blade-compiler/config/db-blade-compiler.php', '[[softpath]]/config/db-blade-compiler.php');
	@copy('[[softpath]]/vendor/flynsarmy/db-blade-compiler/config/.gitkeep', '[[softpath]]/storage/app/db-blade-compiler/views/.gitkeep');
	@copy('[[softpath]]/vendor/intervention/image/src/config/config.php', '[[softpath]]/config/image.php');
	@copy('[[softpath]]/vendor/intervention/imagecache/src/config/config.php', '[[softpath]]/config/imagecache.php');
	@copy('[[softpath]]/vendor/konekt/concord/config/config.php', '[[softpath]]/config/concord.php');
	@copy('[[softpath]]/vendor/laravel/sanctum/config/sanctum.php', '[[softpath]]/config/sanctum.php');
	@copy('[[softpath]]/vendor/laravel/scout/config/scout.php', '[[softpath]]/config/scout.php');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/export.model.stub', '[[softpath]]/stubs/export.model.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/export.plain.stub', '[[softpath]]/stubs/export.plain.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/export.query.stub', '[[softpath]]/stubs/export.query.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/export.query-model.stub', '[[softpath]]/stubs/export.query-model.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/import.collection.stub', '[[softpath]]/stubs/import.collection.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/src/Console/stubs/import.model.stub', '[[softpath]]/stubs/import.model.stub');
	@copy('[[softpath]]/vendor/maatwebsite/excel/config/excel.php', '[[softpath]]/config/excel.php');
	@copy('[[softpath]]/vendor/php-open-source-saver/jwt-auth/config/config.php', '[[softpath]]/config/jwt.php');
	@copy('[[softpath]]/vendor/prettus/l5-repository/src/resources/config/repository.php', '[[softpath]]/config/repository.php');
	@copy('[[softpath]]/packages/Webkul/Core/src/Config/concord.php', '[[softpath]]/config/concord.php');
	@copy('[[softpath]]/packages/Webkul/Core/src/Config/sanctum.php', '[[softpath]]/config/sanctum.php');
	@copy('[[softpath]]/packages/Webkul/Core/src/Config/scout.php', '[[softpath]]/config/scout.php');
	@copy('[[softpath]]/packages/Webkul/Product/src/Config/imagecache.php', '[[softpath]]/config/imagecache.php');
	@copy('[[softpath]]/vendor/diglactic/laravel-breadcrumbs/config/breadcrumbs.php', '[[softpath]]/config/breadcrumbs.php');
	@copy('[[softpath]]/vendor/laravel/tinker/config/tinker.php', '[[softpath]]/config/tinker.php');
	@copy('[[softpath]]/vendor/spatie/laravel-ignition/config/flare.php', '[[softpath]]/config/flare.php');
	@copy('[[softpath]]/vendor/spatie/laravel-ignition/config/ignition.php', '[[softpath]]/config/ignition.php');
	@copy('[[softpath]]/vendor/spatie/laravel-sitemap/config/sitemap.php', '[[softpath]]/config/sitemap.php');
	
	function resetfilelist(){
	global $directorylist;
		$directorylist = array();
	}

	function filelist($startdir="./", $searchSubdirs=1, $directoriesonly=0, $maxlevel="all", $level=1, $reset = 1){
		global $globals;
		//list the directory/file names that you want to ignore
	   $ignoredDirectory = array();
	   $ignoredDirectory[] = ".";
	   $ignoredDirectory[] = "..";
	   $ignoredDirectory[] = "_vti_cnf";
	   global $directorylist;    //initialize global array
	   
	   if(substr($startdir, -1) != '/'){
			$startdir = $startdir.'/';
		}
	   
	   if (is_dir($startdir)) {
		   if ($dh = opendir($startdir)) {
			   while (($file = readdir($dh)) !== false) {
				   if (!(array_search($file,$ignoredDirectory) > -1)) {
					 if (@filetype($startdir . $file) == "dir") {
						 
						   //build your directory array however you choose;
						   //add other file details that you want.
						   
						   $directorylist[$startdir . $file]['level'] = $level;
						   $directorylist[$startdir . $file]['dir'] = 1;
						   $directorylist[$startdir . $file]['name'] = $file;
						   $directorylist[$startdir . $file]['path'] = $startdir;
						   if ($searchSubdirs) {
							   if ((($maxlevel) == "all") or ($maxlevel > $level)) {
								   filelist($startdir . $file . "/", $searchSubdirs, $directoriesonly, $maxlevel, ($level + 1), 0);
							   }
						   }
						  
						   
					   } else {
						   if (!$directoriesonly) {
							 
						  //  echo substr(strrchr($file, "."), 1);
							   //if you want to include files; build your file array 
							   //however you choose; add other file details that you want.
							 $directorylist[$startdir . $file]['level'] = $level;
							 $directorylist[$startdir . $file]['dir'] = 0;
							 $directorylist[$startdir . $file]['name'] = $file;
							 $directorylist[$startdir . $file]['path'] = $startdir;
							  
						 
						}}}}
			   closedir($dh);
		}}

		if(!empty($reset)){
			$r = $directorylist;
			$directorylist = array();
			return($r);
		}
	}

	// Copy from source to destination
	function copydir($source, $destination){
		
		$source = (substr($source, -1) == '/' || substr($source, -1) == '\\' ? $source : $source.'/');
		$destination = (substr($destination, -1) == '/' || substr($destination, -1) == '\\' ? $destination : $destination.'/');
		$source_ = substr($source, 0, -1);
		$destination_ = substr($destination, 0, -1);
		
		if(!is_dir($destination)){
			mkdir($destination);
		}
		
		resetfilelist();	
		$files = filelist($source, 1, 1, 'all');
		$files = (!is_array($files) ? array() : $files);
		
		// Make the folders
		foreach($files as $k => $v){
			mkdir_recursive(str_replace($source_, $destination_, $k), $globals['dirchmod']);
			@chmod(str_replace($source_, $destination_, $k), fileperms($k));
		}
		
		@clearstatcache();	
		resetfilelist();
		
		$files = filelist($source, 1, 0, 'all');
		$files = (!is_array($files) ? array() : $files);
		
		// Copy the files
		foreach($files as $k => $v){
			if(file_exists($k) && is_file($k) && @filetype($k) == "file"){
				copy($k, str_replace($source_, $destination_, $k));
				@chmod(str_replace($source_, $destination_, $k), fileperms($k));
			}
		}
		
		@clearstatcache();	
		resetfilelist();
		
		return true;

	}

	function mkdir_recursive($pathname, $mode){
		is_dir(dirname($pathname)) || mkdir_recursive(dirname($pathname), $mode);
		return is_dir($pathname) || @mkdir($pathname, $mode);
	}