<div>
	<div class="form-group">
		<label>{{ translate('File Name') }}</label>
		<input type="text" class="form-control bg-white border-primary" value="{{ $file->file_name }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('File Type') }}</label>
		<input type="text" class="form-control bg-white border-primary" value="{{ $file->type }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('File Size') }}</label>
		<input type="text" class="form-control bg-white border-primary" value="{{ formatBytes($file->file_size) }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('Uploaded At') }}</label>
		<input type="text" class="form-control bg-white border-primary" value="{{ $file->created_at }}" disabled>
	</div>
	<div class="form-group text-center">
		@php
			if($file->file_original_name == null){
			    $file_name = translate('Unknown');
			}else{
				$file_name = $file->file_original_name;
			}
		@endphp
		<a class="btn btn-primary" href="{{ my_asset($file->file_name) }}" target="_blank" download="{{ $file_name }}.{{ $file->extension }}">{{ translate('Download') }}</a>
	</div>
</div>