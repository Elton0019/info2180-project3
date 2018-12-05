
<form method="post" id="check_user" onsubmit="check_user(event, this)">
    <div class="input-group">
        <label>Firstname</label>
        <input name="firstname" type="text" required>
    </div>
    
    <div class="input-group">
        <label>Lastname</label>
        <input name="lastname" type="text" required>
    </div>

    <div class="input-group">
        <label>Password</label>
        <input name="password" type="varchar" required>
    </div>
    
    <div class="input-group">
        <label>Email</label>
        <input name="email" type="varchar" required>
    </div>
    
    <div class="input-group">
        <label>Telephone</label>
        <input name="telephone" type="int" required>
    </div>
    
    <button type='submit' alert(Successfully created a User)>Create User</button>
</form>