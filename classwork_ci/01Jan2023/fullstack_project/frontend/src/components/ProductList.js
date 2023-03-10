/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import axios from "axios";
import { Link } from "react-router-dom";
 
const ProductList = () => {
    const [products, setProducts] = useState([]);
 
    useEffect(() => {
        getProducts();
    },[]);
 
    const getProducts = async () => {
        const products = await axios.get('http://localhost:8080/products');
        setProducts(products.data.products);
    }
 
    // const deleteProduct = async (id) =>{
    //     await axios.delete(`http://localhost:8080/products/${id}`);
    //     getProducts();
    // }
 console.log(products);
    return (
        <div>
            <Link to="/add" className="button is-primary mt-5">Add New</Link>
            <table className="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Details</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Product category</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
                <tbody>
                    { products.map((product, index) => (
                        <tr key={product.id}>
                            <td>{index + 1}</td>
                            <td>{product.product_name}</td>
                            <td>{product.product_details}</td>
                            <td>{product.product_price}</td>
                            <td>
                                {/* {product.product_image} */}
                                <img src={`http://localhost:8080/${product.product_image}`} width={"90px"}/>
                            </td>
                            <td>{product.product_category}</td>
                            <td>
                                {/* <Link to={`/edit/${product.id}`} className="button is-small is-info">Edit</Link> */}
                                {/* <button onClick={() => deleteProduct(product.id)} className="button is-small is-danger">Delete</button> */}
                            </td>
                        </tr>
                    )) }
                     
                </tbody>
            </table>
        </div>
    )
}
 
export default ProductList;