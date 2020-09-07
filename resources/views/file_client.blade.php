<h1> clients </h1>



<table border="1" >
	<thead>
		<td>id</td>
		<td>nama</td>
		
	</thead>
  <tbody>
	  @foreach ($cl as $ar)
		     <td> {{ $ar['id']}} </td>
		      <td> {{ $ar['nama']}} </td>
		     
  </tbody>
     @endforeach
 </table>