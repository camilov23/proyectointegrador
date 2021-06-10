<div class="modal fade modal-slide-in-right"aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pedido->id_pedido_fact}}">
{{Form::Open(array('action'=>array('pedidosController@destroy',$pedido->id_pedido_fact),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"class="close"data-dismiss="modal"aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Eliminar pedido</h4>
                            </div>
                            <div class="modal-body">
                                <p>Confirme si va a elimar el pedido</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"class="btn btn-default"data-dismiss="modal">Cerrar</button>
                                        <button type="submit"class="btn btn-primary">Confirmar</button></div>
                                            </div>
                                            </div>
                                            {{Form::Close()}}