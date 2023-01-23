/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import axios from "axios";
// import { Link } from "react-router-dom";
 
const ProductList = () => {
    const [products, setProducts] = useState([]);
 
    useEffect(() => {
        getProducts();
    },[]);
 
    const getProducts = async () => {
        const products = await axios.get('http://localhost:8080/frontend/products');
        setProducts(products.data);
    }
 
    // const deleteProduct = async (id) =>{
    //     await axios.delete(`http://localhost:8080/products/${id}`);
    //     getProducts();
    // }
 console.log(products);
    return (
        <div>
            {/* <Link to="/add" className="button is-primary mt-5">Add New</Link> */}
            <table className="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>Product Details</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
                <tbody>
                    { products.map((product, index) => (
                        <tr key={product.id}>
                            <td>{index + 1}</td>
                            <td>{product.product_category}</td>
                            <td>
                                {/* {staff.staff_image} */}
                                <img src={`http://localhost:8080/${product.product_image}`} width={"90px"} height={"70px"} />
                            </td>
                            <td>{product.product_details}</td>
                            
                        </tr>
                    )) }
                     
                </tbody>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>Product Details</th>
                    </tr>
                </thead>
            </table>
        </div>
    )
}
 
export default ProductList;