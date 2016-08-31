@extends('layout')
@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
            	<h3>Производители</h3>
				<div class="col-md-6">
					<h4>Цена за грамм изделия из серебра:</h4>
					<p>Промежуток цен за 1гр., на которую устанавливается наценка:</p>
	
					<table>
						<tr>
							<th><p>от 0руб до 10руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+5 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 10руб до 20руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+10 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 20руб до 30руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+15 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><input  class="form-control" type="text" placeholder="цена от"></th>
							<th><input  class="form-control" type="text" placeholder="цена до"></th>
							<th><input  class="form-control" type="text" placeholder="наценка, р"></th>
						</tr>
						<tr>
							<th></th>
							<th><button type="button" class="btn btn-success">Сохранить</button></th>
							<th></th>
						</tr>
					</table>
					</br>
					</br>
					</br>
					</br>
					<h4>Цена за грамм изделия из золота:</h4>
					<p>Промежуток цен за 1гр., на которую устанавливается наценка:</p>
					<table>
						<tr>
							<th><p>от 0руб до 10руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+5 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 10руб до 20руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+10 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 20руб до 30руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+15 рублей</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						
						<tr>
							<th><input  class="form-control" type="text" placeholder="цена от"></th>
							<th><input  class="form-control" type="text" placeholder="цена до"></th>
							<th><input  class="form-control" type="text" placeholder="наценка, р"></th>
						</tr>
						<tr>
							<th></th>
							<th><button type="button" class="btn btn-success">Сохранить</button></th>
							<th></th>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					</br>
					</br>
					</br>
					<h4>Наценка на цену указаную за товар:</h4>
	
					<table>
						<tr>
							<th><p>от 0руб до 100руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+100%</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 101руб до 1000руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+80%</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><input  class="form-control" type="text" placeholder="цена от"></th>
							<th><input  class="form-control" type="text" placeholder="цена до"></th>
							<th><input  class="form-control" type="text" placeholder="наценка %"></th>
						</tr>
						<tr>
							<th></th>
							<th><button type="button" class="btn btn-success">Сохранить</button></th>
							<th></th>
						</tr>
					</table>
					</br>
					</br>
					</br>
					</br>
					<h4>Процент от оборота: </h4>
					
					<table>
						<tr>
							<th><p>от 0руб до 100руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+100%</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><p>от 101руб до 1000руб</p></th>
							<th><p>Наценка составит:</p></th>
							<th><span>+80%</span><input type="submit" value="-"><input type="submit" value="+"></th>
							
						</tr>
						<tr>
							<th><input  class="form-control" type="text" placeholder="цена от"></th>
							<th><input  class="form-control" type="text" placeholder="цена до"></th>
							<th><input  class="form-control" type="text" placeholder="наценка, р"></th>
						</tr>
						<tr>
							<th></th>
							<th><button type="button" class="btn btn-success">Сохранить</button></th>
							<th></th>
						</tr>
					</table>
				</div>
            </div>
        </div>
    </div>
    
@stop