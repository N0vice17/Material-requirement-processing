const add = document.querySelector(".material-add")
add.addEventListener('click', () => {
    const parent = document.querySelector(".parentdiv");
    const newdiv = document.createElement('material');
    const input1 = document.createElement('input');
    input1.type = 'text';
    input1.placeholder = 'Material Name';
    const input2 = document.createElement('input');
    input2.type = 'text';
    input2.placeholder = 'Quantity';
    newdiv.appendChild(input1);
    newdiv.appendChild(input2);
    parent.appendChild(newdiv);
})