<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Aws\S3\S3Client;

class AwsController extends Controller
{
    public function FileUpload(Request $request)
    {
    	
		// Set Amazon s3 credentials
		$client = S3Client::factory(
		  array(
		    'key'    => "AKIAILKSNLJO55MCYV6A",
		    'secret' => "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"
		  )
		);

		try {

		   $result = $client->putObject(array(
		    'Bucket'=>'cch-rc-bucket',
		    'Key' =>  '/',
		    'SourceFile' => 'index.php',
		    'StorageClass' => 'REDUCED_REDUNDANCY'
		  ));

		  echo $result['ObjectURL'] . "\n";

		} catch (S3Exception $e) {
		  // Catch an S3 specific exception.
		  echo $e->getMessage();
		}


    }
}
