<!DOCTYPE html>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Welcome</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
    
    <div class="padding_lr">
        <div>
            <nav aria-label="breadcrumb">
            <h4>Upload new Document</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Input</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project</li>
            </ol>
            </nav>
        <div>
        <div class="jumbotron">
        <div class="row">
            <div class="col-md-8 mb-3">
            <form>
            <!-- Name and Files -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="name">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>

                <hr>

            <!-- Category and Filters -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Primary filter kind 1</option>
                        <option>Primary filter kind 2</option>
                        <option>Primary filter kind 3</option>
                        <option>Primary filter kind 4</option>
                        <option>Primary filter kind 5</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tags</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="Tags">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Doc Type</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Type 1</option>
                        <option>Type 2</option>
                        <option>Type 3</option>
                        <option>Type 4</option>
                        <option>Type 5</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="Doc Type">
                    </div>
                </div>

                <hr>

            <!-- Donor -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Donor</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="Donor name">
                    </div>
                </div>
            
                <hr>

            <!-- Language and Region -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Language</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Tibetan
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                English
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Hindi
                            </label>
                            
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Region</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Type 1</option>
                        <option>Type 2</option>
                        <option>Type 3</option>
                        <option>Type 4</option>
                        <option>Type 5</option>
                    </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>