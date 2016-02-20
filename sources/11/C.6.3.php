public function successCallback($client) {
    // get user data from client
    $attributes = $client->getUserAttributes();
    print_r($attributes);
    exit;
}
