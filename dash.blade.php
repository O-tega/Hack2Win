@extends('layouts.app')

@section('content')
<div class="container">
<?php {
    echo '
                           
                        <h2 align="middle">Transaction History</h2>
                        <div class="table-responsive" style="height:350px;overflow:auto;">
                      <table class="table table-striped table-sm">
                      <thead>
                          <tr>
                          <th>s/n</th>
                          <th>Crime type</th>
                          <th>Location</th>
                          <th>Crime description</th>
                          <th>Time</th>
                          </tr>
                      </thead>';$i = 1;'
                      <tbody>';?>  @foreach ($posts as $post)
                          
                      <?php echo '
                          <tr>
                          <td>'; echo $i++; echo '</td>
                          <td>';?>  {{$post->type}}<?php echo '</td>
                          <td>';?>  {{$post->location}}<?php echo '</td>
                          <td>';?>  {{$post->description}}<?php echo '</td>
                          <td>';?>  {{$post->created_at}}<?php echo '</td>
                          </tr>
                         
                          ';?> 
                          
                      @endforeach<?php echo '
                      </tbody>
                      </table>
                  </div>';}?>

</div>
        
        @endsection