<!DOCTYPE html>
<html lang="en">
<!-- Navbar Start -->
@include('backend.inc.navbar')
<!-- Navbar end -->

<div id="layoutSidenav">
    <!-- Sidebar Start here -->
@include('backend.inc.sidebar')
<!-- Sidebar end here -->

    <div id="layoutSidenav_content">
        <!-- Dynamic COntent Will Be Here -->

    <main>
    <div class="container-fluid">
       <div class="top mt-5">
         <div class="row">
             <div class="col-md-8">
                 <form action="{{ route('post.store') }}" method="POST">
                     @csrf
                     <div class="form-group">
                         <label for="name">Post Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter Name">
                     </div>
                     <div class="form-group">
                         <label for="details">Details</label>
                         <input type="text" class="form-control" name="details" placeholder="Write down details">
                     </div>

                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
         </div>


           <div class="row">
               <div class="col-md-10 mt-5">
                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Title</th>
                           <th scope="col">Details</th>
                           <th scope="col">Action</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($posts as $post)
                       <tr>
                           <td>{{ $post->name }}</td>
                           <td>{{ $post->details }}</td>
                           <td>{{ $post->created_at->diffForHumans() }}</td>
                           <td>
                               <button type="button" class="btn btn-info">Edit</button>
                           </td>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </div>



    </main>
        <!-- Dynamic COntent Placement -->
        <!-- Footer Start Here -->
    @include('backend.inc.footer')
    <!-- Footer End Here -->
    </div>
</div>
@include('backend.inc.js')
