<!-- Notes -->
1. DB using XAMPP
2. I'm using POSTMAN to do api calling
3. Current project created only create and get list function <!-- may refer the InventoryController -->
4. Sample DB view may refer db_view.png and below provide sample response which according your request

<!-- Sample Response -->
{
    "status": true,
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 6,
                "product_name": "sample5",
                "product_description": "sample5",
                "quantity": 9,
                "status": 1,
                "created_at": "2022-10-20T14:05:35.000000Z",
                "updated_at": "2022-10-20T14:05:35.000000Z"
            },
            {
                "id": 5,
                "product_name": "sample4",
                "product_description": "sample4",
                "quantity": 10,
                "status": 1,
                "created_at": "2022-10-20T14:05:29.000000Z",
                "updated_at": "2022-10-20T14:05:29.000000Z"
            },
            {
                "id": 4,
                "product_name": "sample3",
                "product_description": "sample3",
                "quantity": 10,
                "status": 1,
                "created_at": "2022-10-20T14:05:22.000000Z",
                "updated_at": "2022-10-20T14:05:22.000000Z"
            },
            {
                "id": 3,
                "product_name": "sample2",
                "product_description": "sample2",
                "quantity": 9,
                "status": 1,
                "created_at": "2022-10-20T14:05:17.000000Z",
                "updated_at": "2022-10-20T14:05:17.000000Z"
            },
            {
                "id": 2,
                "product_name": "sample",
                "product_description": "hahaha",
                "quantity": 110,
                "status": 1,
                "created_at": "2022-10-20T14:04:58.000000Z",
                "updated_at": "2022-10-20T14:04:58.000000Z"
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/inventory?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/inventory?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/inventory?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/inventory",
        "per_page": 5,
        "prev_page_url": null,
        "to": 5,
        "total": 5
    },
    "msg": true,
    "code": 200
}
<!-- Sample Response -->