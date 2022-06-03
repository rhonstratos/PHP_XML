
function addCpu() {
	var cpu = document.getElementById("child-cpu");
	var div1 = document.createElement("div");
	div1.className = "d-flex flex-row mt-3 w-100";
	var div2 = document.createElement("div");
	div2.className = "form-group w-100 input-group input-group-lg";

	var span = document.createElement("span");
	span.className = "input-group-text";
	span.innerHTML = "Processor";

	var input1 = document.createElement("input");
	input1.type = "text";
	input1.name = "cpuName[]";
	input1.id = "cpuName";
	input1.className = "form-control text-center";
	input1.required = true;
	input1.placeholder = "Name";

	var input2 = document.createElement("input");
	input2.type = "number";
	input2.name = "cpuCores[]";
	input2.id = "cpuCores";
	input2.className = "form-control text-center";
	input2.required = true;
	input2.placeholder = "Core Count";

	var button = document.createElement("button");
	button.className = "btn btn-success";
	button.type = "button";
	button.onclick = addCpu;
	button.innerHTML = "+";

	div2.appendChild(span);
	div2.appendChild(input1);
	div2.appendChild(input2);
	div2.appendChild(button);
	div1.appendChild(div2);
	cpu.appendChild(div1);

}
function addMemory() {
	var memory = document.getElementById("child-memory");
	var div1 = document.createElement("div");
	div1.className = "d-flex flex-row mt-3 w-100";
	var div2 = document.createElement("div");
	div2.className = "form-group w-100 input-group input-group-lg";

	var span = document.createElement("span");
	span.className = "input-group-text";
	span.innerHTML = "Memory";

	var input1 = document.createElement("input");
	input1.type = "number";
	input1.name = "memoryCapacity[]";
	input1.id = "memoryCapacity";
	input1.className = "form-control text-center";
	input1.placeholder = "Capacity";

	var select = document.createElement("select");
	select.className = "form-select text-center";
	select.id = "memoryUnit";
	select.name = "memoryUnit[]";
	var option1 = document.createElement("option");
	option1.value = "TB";
	option1.innerHTML = "TB";

	var option2 = document.createElement("option");
	option2.value = "GB";
	option2.innerHTML = "GB";

	select.appendChild(option1);
	select.appendChild(option2);

	var button = document.createElement("button");
	button.className = "btn btn-success";
	button.type = "button";
	button.onclick = addMemory;
	button.innerHTML = "+";

	div2.appendChild(span);
	div2.appendChild(input1);
	div2.appendChild(select);
	div2.appendChild(button);
	div1.appendChild(div2);
	memory.appendChild(div1);
}
function addStorage() {
	var storage = document.getElementById("child-storage");
	var div1 = document.createElement("div");
	div1.className = "d-flex flex-row mt-3 w-100";
	var div2 = document.createElement("div");
	div2.className = "form-group w-100 input-group input-group-lg";

	var span = document.createElement("span");
	span.className = "input-group-text";
	span.innerHTML = "Storage";

	var input1 = document.createElement("input");
	input1.type = "number";
	input1.name = "storageCapacity[]";
	input1.id = "storageCapacity";
	input1.className = "form-control text-center";
	input1.placeholder = "Capacity";

	var select = document.createElement("select");
	select.className = "form-select text-center";
	select.id = "storageUnit";
	select.name = "storageUnit[]";
	var option1 = document.createElement("option");
	option1.value = "TB";
	option1.innerHTML = "TB";

	var option2 = document.createElement("option");
	option2.value = "GB";
	option2.innerHTML = "GB";

	select.appendChild(option1);
	select.appendChild(option2);

	var button = document.createElement("button");
	button.className = "btn btn-success";
	button.type = "button";
	button.onclick = addStorage;
	button.innerHTML = "+";

	div2.appendChild(span);
	div2.appendChild(input1);
	div2.appendChild(select);
	div2.appendChild(button);
	div1.appendChild(div2);
	storage.appendChild(div1);
}
function callToast() {
	var option = {
		animation: true,
		autohide: true,
		delay: 3000
	};
	var toastElList = [].slice.call(
		document.querySelectorAll('.toast')
	);
	var toastList = toastElList.map((toastEl) => {
		return new bootstrap.Toast(toastEl, option)
	});

	toastList.forEach(toast => toast.show());
}

export { addCpu, addMemory, addStorage, callToast }