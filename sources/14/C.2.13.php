public function loadAllowance($request, $action)
{
	return [$_COOKIE['allowance'],$_COOKIE['allowance_updated_at']];
}

public function saveAllowance($request, $action, $allowance, $timestamp)
{
	setcookie('allowance', $allowance, time() + (86400 * 30), '/');
	setcookie('allowance_updated_at', $timestamp, time() + (86400 * 30), '/');
}
