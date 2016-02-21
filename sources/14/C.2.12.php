public function getRateLimit($request, $action)
{
	// sesuaikan
	return [1,60]; // contoh maksimla 1 request per 60 detik
}

public function loadAllowance($request, $action)
{
	return [$this->allowance, $this->allowance_updated_at];
}

public function saveAllowance($request, $action, $allowance, $timestamp)
{
	$this->allowance = $allowance;
	$this->allowance_updated_at = $timestamp;
	$this->save();
}
