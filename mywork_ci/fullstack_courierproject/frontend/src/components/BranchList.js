/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import axios from "axios";
// import { Link } from "react-router-dom";
 
const BranchList = () => {
    const [branches, setBranches] = useState([]);
 
    useEffect(() => {
        getBranches();
    },[]);
 
    const getBranches = async () => {
        const branches = await axios.get('http://localhost:8080/frontend/branches');
        setBranches(branches.data);
    }
 
    // const deleteProduct = async (id) =>{
    //     await axios.delete(`http://localhost:8080/products/${id}`);
    //     getProducts();
    // }
 console.log(branches);
    return (
        <div>
            {/* <Link to="/add" className="button is-primary mt-5">Add New</Link> */}
            <table className="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Branch Name</th>
                        <th>Staff Image</th>
                        <th>Staff Details</th>
                        <th>Staff Phone</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
                <tbody>
                    { branches.map((branch, index) => (
                        <tr key={branch.id}>
                            <td>{index + 1}</td>
                            <td>{branch.branch_name}</td>
                            <td>
                                {/* {staff.staff_image} */}
                                <img src={`http://localhost:8080/${branch.branch_image}`} width={"90px"} height={"70px"} />
                            </td>
                            <td>{branch.branch_details}</td>
                            <td>{branch.branch_phone}</td>
                            
                            {/* <td>{staff.branch_id}</td> */}
                            {/* <td> */}
                                {/* <Link to={`/edit/${product.id}`} className="button is-small is-info">Edit</Link> */}
                                {/* <button onClick={() => deleteProduct(product.id)} className="button is-small is-danger">Delete</button> */}
                            {/* </td> */}
                        </tr>
                    )) }
                     
                </tbody>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Branch Name</th>
                        <th>Staff Image</th>
                        <th>Staff Details</th>
                        <th>Staff Phone</th>
                        {/* <th>Actions</th> */}
                    </tr>
                </thead>
            </table>
        </div>
    )
}
 
export default BranchList;