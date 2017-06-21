@foreach ($paciente as $p)

	<tr>
	  <td>
	    {{$p->expediente}}
	  </td>
	  <td>
	    {{$p->nombre}}
	  </td>
	</tr>

@endforeach