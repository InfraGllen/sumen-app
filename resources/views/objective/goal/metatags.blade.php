<!-- Primary Meta Tags -->
<title>{{$goal->title}} - {{app_setting('app_social_title',config('app.name', 'Laravel'))}}</title>
<meta name="title" content="{{$goal->title}} - {{app_setting('app_social_title',config('app.name', 'Laravel'))}}">
<meta name="description" content="Este proyecto es parte de la meta '{{$objective->title}}'. ¡Conocé mas acerca del proyecto entrando en Sumen!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{route('goals.index',['goalId' => $goal->id])}}">
<meta property="og:title" content="{{$goal->title}} - {{app_setting('app_social_title',config('app.name', 'Laravel'))}}">
<meta property="og:description" content="Este proyecto es parte de la meta '{{$objective->title}}'. ¡Conocé mas acerca del proyecto entrando en Sumen!">
<meta property="twitter:image" content="{{URL::to('/')}}{{app_setting('app_social_image','/social-sharer.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{route('goals.index',['goalId' => $goal->id])}}">
<meta property="twitter:title" content="{{$goal->title}} - {{app_setting('app_social_title',config('app.name', 'Laravel'))}}">
<meta property="twitter:description" content="Este proyecto es parte de la meta '{{$objective->title}}'. ¡Conocé mas acerca del proyecto entrando en Sumen!">
<meta property="twitter:image" content="{{URL::to('/')}}{{app_setting('app_social_image','/social-sharer.png')}}">
