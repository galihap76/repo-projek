// JavaScript Document

const searchButton=document.querySelector('.search-button');
searchButton.addEventListener('click', function(){
	const inputKeyword=document.querySelector('.input-keyword');
	fetch('http://www.omdbapi.com/?apikey=1d6e2fb6&s=' + inputKeyword.value)
	.then(response=>response.json())
	.then(response=>{
		const movies=response.Search;
		let cards='';
		movies.forEach(m=> cards += showCards(m));
		const movieContainer=document.querySelector('.movie-container');
		movieContainer.innerHTML = cards;
		
//		Ketika tombol detail di klik
		
		const modalDetailButton = document.querySelectorAll('.modal-detail-button');
		modalDetailButton.forEach(btn=>{
			btn.addEventListener('click', function(){
				const imdbid = this.dataset.imdbid;
				fetch('http://www.omdbapi.com/?apikey=1d6e2fb6&i=' + imdbid)
				.then(response=> response.json())
				.then(m=>{
					let movieDetail = showMovieDetail(m);
					let modalBody= document.querySelector('.modal-body');
					modalBody.innerHTML = movieDetail;
				});
			});
		});
	});
});





function showCards(m){
	return `<div class="col-md-4 my-5">
   			<div class="card">
		  <img src="${m.Poster}" class="card-img-top">
		  <div class="card-body">
			<h5 class="card-title">${m.Title}</h5>
			<h6 class="card-subtitle mb-2 text-muted">${m.Year}</h6>
			<a href="#" class="btn btn-primary modal-detail-button" data-toggle="modal" data-target="#movieDetailModal" data-imdbid="${m.imdbID}">Show Detail</a>
		  </div>
		</div>
   		</div>
   	</div>`;
}

function showMovieDetail(m){
	return `<div class="container-fluid">
        	<div class="row">
        		<div class="col-md-3">
        			<img src="${m.Poster}" class="img-fluid">
        		</div>
        		<div class="col-md">
        			<ul class="list-group">
          <li class="list-group-item"><h4>${m.Title} (${m.Year})</h4></li>
		  <li class="list-group-item"><strong>Director :</strong>  ${m.Director}</li>
		  <li class="list-group-item"><strong>Actors : </strong>  ${m.Actors}</li>
		  <li class="list-group-item"><strong>Writer : </strong>  ${m.Writer}</li>
		  <li class="list-group-item">Plot : </li> ${m.Plot}
                </ul>
        		</div>
        	</div>
        </div>
      </div>`;
}