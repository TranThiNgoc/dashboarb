<h1> Dang nhap thanh cong</h1>
@if(isset($user))
    {{"Ten: ".$user->name}}
    <br>
    {{"Email: ".$user->email}}
    @endif