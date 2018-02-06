use Aws\S3\S3Client;

$client = S3Client::factory(array(
    'profile' => '~/.aws/credentials'
));
