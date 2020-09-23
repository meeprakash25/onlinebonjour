<div class="sidebar">
    <div class="widget block-categories">
        <div class="block-title">
            <h2>Info Pages</h2>
        </div>
        <div class="block-content">
            <ul class="list-categories">
            
                @if(count($result['commonContent']['pages']))
                @foreach($result['commonContent']['pages'] as $page)
                    <li> <a href="{{ URL::to('/page?name='.$page->slug)}}">{{$page->name}}</a> </li>
                @endforeach
                @endif
                
            </ul>
        </div>
    </div>
</div>