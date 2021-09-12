//javascript document

let search_button=document.querySelector('.search-button');
search_button.addEventListener('click', function(){
	const inputKeyword=document.querySelector('.input-keyword');
	fetch('https://www.themealdb.com/api/json/v1/1/filter.php?i=' + inputKeyword.value)
	.then(response=>response.json())
	.then(response=>{
        //ambil data JSON dari API
		let meals=response.meals;
		let cards='';
		meals.forEach(m=> cards += showFood(m));
		const foodContainer=document.querySelector('.food-container');
		foodContainer.innerHTML = cards;
		
//		Ketika tombol detail di klik
		
		const modalDetailButton = document.querySelectorAll('.modal-detail-button');
		modalDetailButton.forEach(btn=>{
			btn.addEventListener('click', function(){
				const id = this.dataset.id;
				fetch('https://www.themealdb.com/api/json/v1/1/lookup.php?i=' + id)
				.then(response=> response.json())
				.then(m=>{
					let meals2 = m.meals;
					let cards2 = '';
					meals2.forEach(f=> cards2 += showFoodDetail(f));
					let modalBody= document.querySelector('.modal-body');
					modalBody.innerHTML = cards2;
				});
			});
		});
	});
});





function showFood(m){
	return `<div class="col-md-4 my-5">
   			<div class="card">
		  <img src="${m.strMealThumb}" class="card-img-top">
		  <div class="card-body">
			<h5 class="card-title">${m.strMeal}</h5>
			<a href="#" class="btn btn-primary modal-detail-button" data-toggle="modal" data-target="#foodDetailModal" data-id="${m.idMeal}">Show Detail</a>
		  </div>
		</div>
   		</div>
   	</div>`;
}

function showFoodDetail(m){
	return `<div class="container-fluid">
        	<div class="row">
        			<center><img src="${m.strMealThumb}" class="img-fluid mb-4 w-50"></center>
        		<div class="col-md mb-3">
        			<ul class="list-group">
          <center><h3>${m.strMeal}</h3></center>
          <p>${m.strInstructions}</p>
		
                </ul>
        		</div>
        	</div>
        </div>
      </div>`;
}