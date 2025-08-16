const tables = document.querySelectorAll('.table');
const tableId = document.querySelectorAll('.data-table-id');
tables.forEach(table => {
    table.addEventListener('click', () => {
        const tableId = table.getAttribute('data-table-id');
        if (!table.classList.contains('empty')) { // เช็คว่าไม่ใช่คลาส .empty
            if (table.classList.contains('selected')) {
                table.classList.remove('selected');
                table.style.backgroundColor = ''; // กำหนดให้เป็นสีเริ่มต้น
            } else {
                table.classList.add('selected');
                table.style.backgroundColor = '#F3AB44'; // สีเมื่อทำการจองโต๊ะ
            }
        }
    });
});
