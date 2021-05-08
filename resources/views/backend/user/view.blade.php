<!DOCTYPE html>
<html lang="en">
<!-- Navbar Start -->
@include('backend.inc.navbar')

<div id="layoutSidenav">
    <!-- Sidebar Start here -->
@include('backend.inc.sidebar')
<!-- Sidebar end here -->

    <div id="layoutSidenav_content">
        <!-- Dynamic Content Will Be Here -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">User list</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">User List</li>
                </ol>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        <!-- Table Start -->

        <!-- Table End -->
        </main>
        <!-- Dynamic COntent Placement -->
        <!-- Footer Start Here -->
    @include('backend.inc.footer')
    <!-- Footer End Here -->
    </div>
</div>
@include('backend.inc.js')

</html>
