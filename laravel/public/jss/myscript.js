// tạo hiệu ứng cho flash message
$("div.alert").delay(3000).slideUp();
//kiểm tra hàm xóa
function xacnhanxoa (msg)
{
	if(window.confirm(msg))
	{
		return true;
	}
	return false;
}