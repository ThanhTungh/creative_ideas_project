<h3>@yield('title')</h3> 

@yield('form_tag')
    @csrf
    <div>Email address</div>
    <div>
        <input type="text" name="email">
    </div>

    <div>Password</div>
    <div>
        <input type="password" name="password">
    </div>

    <div style="margin-top: 10px;">
        <input type="submit" value="Login">
    </div>

    @yield('other_roles')

</form>