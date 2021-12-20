<x-app-layout>
    <div>
        <h1>Admin Dashboard</h1>
    </div>
    <div>
        <form action="{{ url('/add-subadmin') }}" method="POST">
            @csrf
            <div>
                <label for="">Name</label>
               <input type="text" id="name" name="name" required >
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" id="email" name="email" required >
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" id="password" name="password" required >
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
           
          </form>
    </div>
</x-app-layout>
