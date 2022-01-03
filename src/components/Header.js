import React from 'react'
import Navbar from './Navbar'
import { FaClinicMedical, FaFacebookSquare, FaWhatsappSquare, FaSkype } from "react-icons/fa";

export default function Header() {
    return (
        <div>
            <div>
                Téléphone: (+237) 690 868 185 | Email: nguewouom@gmail.com
                <div>
                    <span><FaFacebookSquare /></span>
                    <span><FaWhatsappSquare /></span>
                    <span><FaSkype /></span>
                </div>
            </div>
            <div>
                <FaClinicMedical />
            </div>
            <Navbar />
        </div>
    )
}
