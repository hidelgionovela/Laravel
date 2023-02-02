

<form action="" method="post">
        <center>
                <h1>Login</h1>
        <label for="">Username</label>
        <input style="padding:8px; margin:10px;" type="text" name="username" id="" placeholder="username">
        <label  for="">Password</label>
        <input style="padding:8px; margin:10px;" type="password" name="password" id="" placeholder="password"><br>
        {{-- <button style="padding:8px; margin:10px;">Tente com Google</button> --}}
        <button style="padding:8px; margin:10px;" type="submit">Submeter</button>
</center>

<a href="{{ route('google-auth') }}"> Tente com Google</a>
</form>