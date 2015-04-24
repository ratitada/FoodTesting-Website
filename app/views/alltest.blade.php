@extends('layout.default')
@section('content')
    <div class = "row">
        <div class= "large-12 columns">
            <div class = "panel">
                <div class = "row">
                    <div class= "large-12 columns">
                        <h2 class="header2">All Test<a class = "button add" href ="{{URL::to('addtest')}}" style = "margin-top: -5px;">New Test</a></h2>
                    </div>
                </div>
                <div class = "row">
                    <div class= "large-12 columns">
                        <table>
                            <thead>
                                <tr>
                                    <th width="150">Test id</th>
                                    <th width="450">Detail</th>
                                    <th width="200">created at</th>
                                    <th width="200">updated at</th>
                                    <th width="20">Manage</th>
                                </tr>
                                <tbody>
                                    @foreach($allt as $t)
                                        <tr>
                                            <td><a href="{{URL::to('tdetail',array('id'=>$t->tid))}}"><?php echo sprintf("%03d", $t->tid);?></a></td>
                                            <td>{{$t->detail}}</td>
                                            <td>{{$t->created_at}}</td>
                                            <td>{{$t->updated_at}}</td>
                                           	<td align="center">
	                                           	<?php echo"<a href='app/act/deletetest.php?tid=".$t->tid."'>"?><img src="public/assets/image/60578.png" width="15" border="0">  </a>
	                                           	<?php echo"<a href='#".$t->tid."' data-reveal-id='myModal".$t->tid."' data-reveal>"?>  <img src="public/assets/image/73547.png" width="15" border="0"></a>
                                           	</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($allt as $t)
    <div id=<?php echo"'myModal".$t->tid."'"?> class="reveal-modal small" data-reveal>
        <form action = <?php echo"app/act/copytest.php?tid=".$t->tid?> method = "post">
            <h2 class="header2">Copy Test from id <?php echo $t->tid?></h2>
            <div class="row">
                <div class="large-12 columns">
                    <label>New Test id
                        <input type="text" id = "newtid" name = "newtid"/>
                    </label>
                </div>
            </div>
            <div class = "login-btn">
                <input class = "button next" type="submit" value = "Done">
            </div>
        </form>
    </div>
    @endforeach
@endsection