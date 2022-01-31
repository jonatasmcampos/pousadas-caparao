<!-- Section 5 -->
<div class="section-5-container section-container" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2>Nossas Pousadas</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>Lindas e aconchegantes pousadas. Confira! ↓</p>
            </div>
        </div>
        <div class="row alinhar-pousadas">
            <!-- Listando as pousadas -->

            <div class="row">
                @foreach ($pousadas as $pousada)

                <div class="col-md-3 section-5-box wow fadeInUp">
                    <div class="section-5-box-image">
                        <img src="{{ $pousada['imagem'] }}" alt="portfolio-1">
                    </div>
                    <h3>
                        <a href="#">{{ $pousada['nome'] }}</a>
                        <i class="fas fa-angle-right"></i>
                    </h3>
                    <div class="section-5-box-date">
                        Diária: <i>R$</i> {{ $pousada['diaria'] }}
                    </div>
                    <p>{{ $pousada['descricao'] }}</p>
                    <form action="{{ route('info.update', [ 'info' => $pousada['id']])}}" method="POST" enctype="multipart/form-data">
                       @method('PUT')
                        @csrf
                        <input type="file" name="imageUpdate" required class="btn btn-primary btn-customized-2">
                        <button type="submit">Alterar</button>
                    </form>
                  
                    <a href="{{route('info.destroy', ['info' => $pousada['id']])}}"
                        data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?"
                        data-method="DELETE" class="btn btn-primary col-12">Excluir</a>
                </div>
                @endforeach
            </div>
            <form action="{{ route('uploadImg')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required class="btn btn-primary btn-customized-2">
                <button type="submit">Adicionar</button>

            </form>
        </div>

    </div>
</div>
