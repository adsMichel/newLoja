@csrf
<div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Dados Gerais</h3>
    </div>

    <div class="card-body">
        <div class="form-row">
            <div class="col-sm-4">
                <label for="name">Nome</label>
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name', $data->name ?? '') }}" autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <label for="price">Preço</label>
                <div class="form-group">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                        name="price" value="{{ old('price', $data->price ?? '') }}" autocomplete="price" autofocus>
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <label for="quantity">Quantidade</label>
                <div class="form-group">
                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror"
                        name="quantity" value="{{ old('quantity', $data->quantity ?? '') }}" autocomplete="quantity"
                        autofocus>
                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="description">Descrição</label>
                <div class="form-group">
                    <input id="description" type="text"
                        class="form-control @error('description') is-invalid @enderror" name="description"
                        value="{{ old('description', $data->description ?? '') }}" autocomplete="description" autofocus>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="media">Photo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="media" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Imagem</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="card-footer">
    <a href="{{ route('product.index') }}" class="btn btn-danger">Cancelar</a>
    <!-- <button type="submit" class="btn btn-danger">Cancelar</button> -->
    <button class="btn btn-primary float-right">Salvar</button>
</div>

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush
