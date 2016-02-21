$data = $cache->get($key);
if ($data === false) {
    $cache->set($key, $data);
}
