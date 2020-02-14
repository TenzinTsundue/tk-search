<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>add</title>
</head>
<body>
<br>
<div class='container jumbotron'>
<!-- Basic Detail -->
    <h1 class="display-4">File Upload</h1>
    <br>
    <div class="row">
        <div class="col-2">
            <strong>Basic Detail</strong>
        </div>
        <div class="col-2">
            Name
        </div>
        <div class="col-8">
            <input type="text" class="form-control" id="staticEmail" placeholder="Name">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            Description
        </div>
        <div class="col-8">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            File
        </div>
        <div class="col-8">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <br>
    <br>
  
<!-- Donor Detail -->
    <div class="row">
        <div class="col-2">
            <strong>Donar</strong>
        </div>
        <div class="col-2">
           Name
        </div>
        <div class="col-8">
            <input type="text" class="form-control" id="staticEmail" placeholder="Donor name">
        </div>
    </div>
    <br>
    <br>
<!-- Filter Detail -->
    <div class="row">
        <div class="col-2">
            <strong>Filter</strong>
        </div>
        <div class="col-2">
            Category
        </div>
        <div class="col-8">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Primary filter kind 1</option>
                <option>Primary filter kind 2</option>
                <option>Primary filter kind 3</option>
                <option>Primary filter kind 4</option>
                <option>Primary filter kind 5</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            Tags
        </div>
        <div class="col-8">
            <input type="text" class="form-control" id="staticEmail" placeholder="Tags">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            Doc Type
        </div>
        <div class="col-8">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Type 1</option>
                <option>Type 2</option>
                <option>Type 3</option>
                <option>Type 4</option>
                <option>Type 5</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            Year
        </div>
        <div class="col-8">
            <input type="text" class="form-control" id="staticEmail" placeholder="Doc Type">
        </div>
    </div>
    <br>
    <br>
<!-- Language and region Detail -->
    <div class="row">
        <div class="col-2">
            <strong>Language and region</strong>
        </div>
        <div class="col-2">
            Language
        </div>
        <div class="col-8">
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
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            Region
        </div>
        <div class="col-8">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Type 1</option>
                <option>Type 2</option>
                <option>Type 3</option>
                <option>Type 4</option>
                <option>Type 5</option>
            </select>
        </div>   
    </div>
    <br>
    <br>

    <!-- Additional Files -->
    <div class="row">
        <div class="col-2">
            <strong>Additional Files</strong>
        </div>
        <div class="col-2">
            File
        </div>
        <div class="col-8">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            File
        </div>
        <div class="col-8">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            File
        </div>
        <div class="col-8">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            File
        </div>
        <div class="col-8">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <br>
    
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    
</div>
</body>
</html>