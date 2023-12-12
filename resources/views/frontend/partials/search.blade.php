<div class="widget widget_search">
    <form role="search" method="get" action="/blog" class="searchform">
        <div class="input-group">
            <input name="search" value="{{request("search")}}" class="form-control" placeholder="Enter your keywords..." type="search">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
</div>
