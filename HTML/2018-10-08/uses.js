var data = [
    [
        "id":           "1",
        "name":         "\'No Control Air\'Cotton cardigan",
        "price":        "4800.00",
        "piority":      "1",
        "gender":       "Both",
        "brand_id":     "17",
        "category_id":  "1",
        "created_at":   "2014-03-13 04:17:16"
    ],
    [
        "id":           "3",
        "name":         "80's College Sweat",
        "price":        "7800.00",
        "piority":      "2",
        "gender":       "Both"
        "brand_id":     "42",
        "category_id":  "2",
        "created_at":   "2014-03-13 04:17:21"
    ]
]

$('#example').DataTable({
    data: data,
    columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'price' },
        { data: 'piority' },
        { data: 'gender' },
        { data: 'created_at' }
    ]
});